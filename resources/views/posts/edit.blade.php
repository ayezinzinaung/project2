<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Post Edit') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-200">
                    <form method="POST" action="{{ route('posts.update', $post)}}">
                        @method('PUT')
                        @csrf
                        Title
                        <input type="text" value="{{ $post->title }}" name="title" class="block font-medium text-sm text-gray-700 dark:text-gray-300">
                        <br>
                        Post Text :
                        <textarea name="post_text" class="block font-medium text-sm text-gray-700 dark:text-gray-300">{{ $post->post_text }}</textarea>
                        <br>
                        Category : 
                        <select name="category_id" class="block font-medium text-sm text-gray-700 dark:text-gray-300">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    @selected($category->id == $post->category_id) >
                                        {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                        <br>
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-500 rounded-md font-semibold text-xs text-gray-700 dark:text-gray-300 uppercase tracking-widest shadow-sm hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 disabled:opacity-25 transition ease-in-out duration-150">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
