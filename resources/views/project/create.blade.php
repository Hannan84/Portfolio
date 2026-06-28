<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-white leading-tight">
                {{ __('Create Project') }}
            </h2>
            <a href="{{ route('project.index') }}" class="text-portfolio-muted hover:text-white transition-colors text-sm font-medium">
                &larr; Back to Projects
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-portfolio-card rounded-2xl shadow-xl border border-white/5 overflow-hidden">
                <div class="p-6 sm:p-8">
                    <form action="{{ route('project.store') }}" method="POST" enctype="multipart/form-data" class="space-y-8">
                        @csrf

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <!-- Left Column: Basic Info -->
                            <div class="space-y-6">
                                <div>
                                    <h3 class="text-lg font-medium text-white mb-4 border-b border-white/10 pb-2">Basic Information</h3>
                                </div>
                                <!-- Project Name -->
                                <div>
                                    <label for="name" class="block text-sm font-medium text-portfolio-muted mb-2">Project Name <span class="text-red-500">*</span></label>
                                    <input type="text" name="name" id="name" required value="{{ old('name') }}"
                                           class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white placeholder-white/20 focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-colors"
                                           placeholder="e.g. E-commerce Platform">
                                    @error('name')
                                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Description -->
                                <div>
                                    <label for="description" class="block text-sm font-medium text-portfolio-muted mb-2">Short Description</label>
                                    <textarea name="description" id="description" rows="3"
                                              class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white placeholder-white/20 focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-colors resize-none"
                                              placeholder="Briefly describe this project...">{{ old('description') }}</textarea>
                                    @error('description')
                                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Tags -->
                                <div>
                                    <label for="tags" class="block text-sm font-medium text-portfolio-muted mb-2">Tags</label>
                                    <input type="text" name="tags" id="tags" value="{{ old('tags') }}"
                                           class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white placeholder-white/20 focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-colors"
                                           placeholder="e.g. Laravel, React, Tailwind (comma separated)">
                                    <p class="text-xs text-portfolio-muted mt-1">Separate multiple tags with commas.</p>
                                    @error('tags')
                                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Project Image -->
                                <div>
                                    <label for="image" class="block text-sm font-medium text-portfolio-muted mb-2">Project Image <span class="text-red-500">*</span></label>
                                    <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-white/10 border-dashed rounded-xl hover:border-blue-500/50 transition-colors bg-white/[0.02]">
                                        <div class="space-y-1 text-center">
                                            <i class="fa-solid fa-cloud-arrow-up text-3xl text-portfolio-muted mb-3"></i>
                                            <div class="flex text-sm text-portfolio-muted justify-center">
                                                <label for="image" class="relative cursor-pointer rounded-md font-medium text-blue-400 hover:text-blue-300 focus-within:outline-none">
                                                    <span>Upload a file</span>
                                                    <input id="image" name="image" type="file" class="sr-only" accept="image/*" required onchange="document.getElementById('file-name').textContent = this.files[0].name">
                                                </label>
                                                <p class="pl-1">or drag and drop</p>
                                            </div>
                                            <p class="text-xs text-portfolio-muted/70">PNG, JPG, GIF up to 2MB</p>
                                            <p id="file-name" class="text-sm text-white font-medium mt-2"></p>
                                        </div>
                                    </div>
                                    @error('image')
                                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <!-- Right Column: URLs -->
                            <div class="space-y-6">
                                <div>
                                    <h3 class="text-lg font-medium text-white mb-4 border-b border-white/10 pb-2">Project Links</h3>
                                </div>

                                <!-- Live URL -->
                                <div>
                                    <label for="project_url" class="block text-sm font-medium text-portfolio-muted mb-2"><i class="fa-solid fa-globe mr-1"></i> Live URL</label>
                                    <input type="url" name="project_url" id="project_url" value="{{ old('project_url') }}"
                                           class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white placeholder-white/20 focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-colors"
                                           placeholder="https://yourproject.com">
                                    @error('project_url')
                                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- GitHub URL -->
                                <div>
                                    <label for="github_url" class="block text-sm font-medium text-portfolio-muted mb-2"><i class="fa-brands fa-github mr-1"></i> GitHub Repository</label>
                                    <input type="url" name="github_url" id="github_url" value="{{ old('github_url') }}"
                                           class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white placeholder-white/20 focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-colors"
                                           placeholder="https://github.com/username/repo">
                                    @error('github_url')
                                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Play Store URL -->
                                <div>
                                    <label for="play_store_url" class="block text-sm font-medium text-portfolio-muted mb-2"><i class="fa-brands fa-google-play mr-1 text-green-400"></i> Play Store Link</label>
                                    <input type="url" name="play_store_url" id="play_store_url" value="{{ old('play_store_url') }}"
                                           class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white placeholder-white/20 focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-colors"
                                           placeholder="https://play.google.com/store/apps/details?id=...">
                                    @error('play_store_url')
                                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- App Store URL -->
                                <div>
                                    <label for="app_store_url" class="block text-sm font-medium text-portfolio-muted mb-2"><i class="fa-brands fa-apple mr-1 text-blue-300"></i> App Store Link</label>
                                    <input type="url" name="app_store_url" id="app_store_url" value="{{ old('app_store_url') }}"
                                           class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white placeholder-white/20 focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-colors"
                                           placeholder="https://apps.apple.com/app/...">
                                    @error('app_store_url')
                                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="pt-6 flex items-center justify-end border-t border-white/5 space-x-4">
                            <a href="{{ route('project.index') }}" class="text-portfolio-muted hover:text-white px-4 py-2 rounded-lg text-sm font-medium transition-colors">
                                Cancel
                            </a>
                            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-2.5 rounded-lg text-sm font-medium transition-colors shadow-lg shadow-blue-500/20">
                                Create Project
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
