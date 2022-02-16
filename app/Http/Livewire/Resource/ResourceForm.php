<?php

namespace App\Http\Livewire\Resource;

use App\Models\Resource;
use LivewireUI\Modal\ModalComponent;
use AliBayat\LaravelCategorizable\Category;

class ResourceForm extends ModalComponent
{
    public int|Resource $resource;
    public $categories;
    public $category;

    protected array $rules = [
        'resource.name' => 'required|min:3|max:255|unique:resources,name',
        'resource.description' => 'required|min:3|max:255',
        'resource.brief' => 'required|min:3|max:255',
        'category' => 'required|exists:categories,id',
    ];

    public function mount(int|Resource $resource = null)
    {
        $this->resource = $resource ? Resource::find($resource) : new Resource();
        $this->category = $this->resource->categories->first()->id ?? 0;
        $this->categories = Category::all();
    }

    public function save()
    {
        $this->validate();

        $this->resource->save();

        $category = Category::find($this->category);
        if ($category) {
            $this->resource->syncCategories($category);
        }

        $this->emit('resourceUpdated', $this->resource->id);

        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.resource.resource-form');
    }
}
