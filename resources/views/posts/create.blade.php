<x-app-layout>
	<x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('New Post') }}
        </h2>
    </x-slot>
	
	<div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
			<div class="px-4 py-4 -mx-4 overflow-x-auto sm:-mx-8 sm:px-8">
				<div class="inline-block min-w-full p-6 overflow-hidden text-gray-700 bg-white rounded-lg shadow dark:text-gray-300 dark:bg-gray-900">

					<form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
						@csrf
						<div class="flex flex-wrap mb-6">
							<div class="w-full px-3 mb-6 md:w-2/5 md:mb-0">
								<label for="title" class="block mb-1">Title</label>
								<input id="title" name="title" type="text" class="w-full h-10 px-3 mb-2 text-base text-gray-800 placeholder-gray-600 border rounded-lg focus:shadow-outline" value="{{ old('title') }}">
								@error('title')
                                    <span class="text-xs text-red-700">{{ $message }}</span>
                                @enderror
							</div>
							<div class="w-full px-3 mb-6 md:w-1/5 md:mb-0">
								<label for="published_at" class="block mb-1">Published At</label>
								<input id="published_at" name="published_at" type="text" class="w-full h-10 px-3 mb-2 text-base text-gray-800 placeholder-gray-600 border rounded-lg focus:shadow-outline flatpickrSelector" value="{{ old('published_at') }}">
								@error('published_at')
                                    <span class="text-xs text-red-700">{{ $message }}</span>
                                @enderror
							</div>
							<div class="w-full px-3 mb-6 md:w-1/5 md:mb-0">
								<label for="active" class="block mb-1">Draft?</label>
								<div class="relative inline-block w-full">
									<select class="w-full h-10 pl-3 pr-6 text-base text-gray-800 placeholder-gray-600 border rounded-lg appearance-none focus:shadow-outline" id="active" name="active">
										<option value="0" {{ (old('active') == "0") ? 'selected' : '' }}>Yes</option>
										<option value="1" {{ (old('active') == "1") ? 'selected' : '' }}>No</option>
									</select>
									<div class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-800 pointer-events-none">
										<svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" fill-rule="evenodd"></path></svg>
									</div>
								</div>
								@error('active')
                                    <span class="text-xs text-red-700">{{ $message }}</span>
                                @enderror
							</div>
							<div class="w-full px-3 mb-6 md:w-1/5 md:mb-0">
								<label for="sticky" class="block mb-1">Sticky?</label>
								<div class="relative inline-block w-full">
									<select class="w-full h-10 pl-3 pr-6 text-base text-gray-800 placeholder-gray-600 border rounded-lg appearance-none focus:shadow-outline" id="sticky" name="sticky">
										<option value="0" {{ (old('sticky') == "0") ? 'selected' : '' }}>No</option>
										<option value="1" {{ (old('sticky') == "1") ? 'selected' : '' }}>Yes</option>
									</select>
									<div class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-800 pointer-events-none">
										<svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" fill-rule="evenodd"></path></svg>
									</div>
								</div>
								@error('sticky')
                                    <span class="text-xs text-red-700">{{ $message }}</span>
                                @enderror
							</div>
						</div>
						<div class="flex flex-wrap">
							<div class="w-full px-3">
								<label for="grid-password" class="block mb-1">Post body</label>
								<x-easy-mde name="body" id="body" :options="['hideIcons' => ['side-by-side','fullscreen',]]"></x-easy-mde>
								@error('body')
                                    <span class="text-xs text-red-700">{{ $message }}</span>
                                @enderror
							</div>
						</div>

						<div class="px-4 py-5 mb-6 sm:p-6">
                            <label for="tags" class="block text-sm font-medium">Tags</label>
                            @foreach($tags as $tag)
                                <label class="inline-flex items-center m-2">
                                    <input class="text-green-600 border-gray-300 rounded shadow-sm focus:border-green-300 focus:ring focus:ring-offset-0 focus:ring-green-200 focus:ring-opacity-50" type="checkbox" value="{{ $tag->name }}" name="tags[]" />
                                    <span class="ml-1">{{ $tag->name }}</span>
                                </label>
                            @endforeach
                            @error('tags')
                                <p class="text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

						<div class="flex items-center justify-end px-3 text-right">
                            <x-jet-button>
                                {{ __('Save') }}
                            </x-jet-button>
                        </div>
					</form>

				</div>
			</div>
		</div>
	</div>
</x-app-layout>