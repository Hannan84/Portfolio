<header class="bg-transparent pt-6">

    <nav x-data="{ isOpen: false }" class="fixed top-0 inset-x-0 z-50 bg-portfolio-bg/80 backdrop-blur-lg border-b border-portfolio-card/50 transition-all duration-300">
        <div class="container px-6 py-4 mx-auto">
            <div class="flex items-center justify-between">
                <!-- Logo -->
                <div class="flex items-center space-x-3">
                    <a href="#" class="flex items-center space-x-3 group">
                        <div class="flex items-center justify-center w-10 h-10 bg-portfolio-card border border-portfolio-accent/30 rounded-xl group-hover:border-portfolio-accent transition-colors duration-300">
                            <svg class="w-5 h-5 text-portfolio-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                            </svg>
                        </div>
                        <span class="text-xl font-bold text-white font-outfit">Hannan.Dev</span>
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#home" class="text-sm font-medium text-portfolio-text hover:text-portfolio-accent transition-colors duration-300 relative group">
                        Home
                    </a>
                    <a href="#work" class="text-sm font-medium text-portfolio-text hover:text-portfolio-accent transition-colors duration-300 relative group">
                        Work
                    </a>
                    <a href="#about" class="text-sm font-medium text-portfolio-text hover:text-portfolio-accent transition-colors duration-300 relative group">
                        About
                    </a>
                    <a href="#skills" class="text-sm font-medium text-portfolio-text hover:text-portfolio-accent transition-colors duration-300 relative group">
                        Skills
                    </a>
                    <a href="#contact" class="text-sm font-medium text-portfolio-text hover:text-portfolio-accent transition-colors duration-300 relative group">
                        Contact
                    </a>
                </div>

                <!-- CTA Button & Mobile Menu Button -->
                <div class="flex items-center space-x-4">
                    <!-- Contact Button -->
                    <a href="#contact" class="hidden md:block px-6 py-2.5 text-sm font-semibold text-portfolio-bg bg-portfolio-accent rounded-lg shadow-lg shadow-portfolio-accent/20 hover:shadow-portfolio-accent/40 hover:-translate-y-0.5 transition-all duration-300">
                        Get In Touch
                    </a>

                    <!-- Mobile menu button -->
                    <button @click="isOpen = !isOpen" class="md:hidden p-2 rounded-lg text-portfolio-text hover:text-portfolio-accent hover:bg-portfolio-card transition-colors duration-300">
                        <svg x-show="!isOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                        <svg x-show="isOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="display: none;">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div x-show="isOpen"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 -translate-y-4"
                 x-transition:enter-end="opacity-100 translate-y-0"
                 x-transition:leave="transition ease-in duration-200"
                 x-transition:leave-start="opacity-100 translate-y-0"
                 x-transition:leave-end="opacity-0 -translate-y-4"
                 class="md:hidden mt-4 py-4 border-t border-portfolio-card" style="display: none;">
                <div class="flex flex-col space-y-4">
                    <a href="#home" @click="isOpen = false" class="px-4 py-3 text-base font-medium text-portfolio-text hover:text-portfolio-accent hover:bg-portfolio-card rounded-lg transition-colors duration-300">
                        Home
                    </a>
                    <a href="#work" @click="isOpen = false" class="px-4 py-3 text-base font-medium text-portfolio-text hover:text-portfolio-accent hover:bg-portfolio-card rounded-lg transition-colors duration-300">
                        Work
                    </a>
                    <a href="#about" @click="isOpen = false" class="px-4 py-3 text-base font-medium text-portfolio-text hover:text-portfolio-accent hover:bg-portfolio-card rounded-lg transition-colors duration-300">
                        About
                    </a>
                    <a href="#skills" @click="isOpen = false" class="px-4 py-3 text-base font-medium text-portfolio-text hover:text-portfolio-accent hover:bg-portfolio-card rounded-lg transition-colors duration-300">
                        Skills
                    </a>
                    <a href="#contact" @click="isOpen = false" class="px-4 py-3 text-base font-medium text-portfolio-text hover:text-portfolio-accent hover:bg-portfolio-card rounded-lg transition-colors duration-300">
                        Contact
                    </a>
                    <a href="#contact" @click="isOpen = false" class="mx-4 mt-2 px-4 py-3 text-base font-semibold text-center text-portfolio-bg bg-portfolio-accent rounded-lg shadow-lg hover:shadow-portfolio-accent/40 transition-all duration-300">
                        Get In Touch
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container px-6 py-24 mx-auto md:py-32" id="home">
        <div class="items-center lg:flex lg:gap-12 xl:gap-20">
            <div class="w-full lg:w-1/2 animate-on-scroll">
                <div class="lg:max-w-xl">
                    <!-- Main Heading -->
                    <div class="mb-4">
                        <span class="inline-block text-portfolio-accent font-medium tracking-wider text-sm uppercase">
                            Hello, I'm
                        </span>
                    </div>

                    <h1 class="text-4xl font-bold text-white lg:text-6xl font-outfit mb-4">
                        Hannan Sarkar
                    </h1>
                    
                    <h2 class="text-2xl lg:text-3xl font-medium text-portfolio-muted mb-6">
                        Passionate about building <span class="text-white">Scalable</span> and <span class="text-portfolio-accent">functional</span> web applications, REST APIs, and Business Solutions.
                    </h2>

                    <!-- Description -->
                    <p class="text-lg text-portfolio-muted leading-relaxed mb-8">
                        I develop scalable web applications, RESTful APIs, and business-driven software solutions using Laravel,
                        PHP, and MySQL. With 2.5+ years of professional experience, I specialize in backend architecture,
                        payment gateway integration, third-party service integration, database optimization,
                        and building reliable systems that power modern web and mobile applications.
                    </p>

                    <!-- CTA Buttons -->
                    <div class="flex flex-col gap-4 sm:flex-row sm:items-center">
                        <a href="#contact" class="px-8 py-3.5 text-sm font-semibold text-portfolio-bg transition-all duration-300 bg-portfolio-accent border border-portfolio-accent rounded-md shadow-lg hover:shadow-portfolio-accent/20 hover:-translate-y-1 text-center">
                            Hire Me
                        </a>
                        <a href="#work" class="px-8 py-3.5 text-sm font-semibold text-portfolio-accent transition-all duration-300 bg-transparent border border-portfolio-accent/50 rounded-md hover:bg-portfolio-accent/10 hover:border-portfolio-accent text-center">
                            View My Work
                        </a>
                    </div>
                </div>
            </div>

            {{-- Right Content - Code Editor --}}
            <div class="flex items-center justify-center w-full mt-16 lg:mt-0 lg:w-1/2 animate-on-scroll animation-delay-200">
    <div class="w-full max-w-lg bg-[#111f33]/80 backdrop-blur-sm rounded-xl overflow-hidden shadow-2xl border border-white/5 relative z-10 group">
        
        <!-- Mac OS Window Header -->
        <div class="flex items-center px-4 py-3 bg-[#0a1628]/80 border-b border-white/5">
            <div class="flex space-x-2">
                <div class="w-3 h-3 bg-red-500 rounded-full"></div>
                <div class="w-3 h-3 bg-yellow-500 rounded-full"></div>
                <div class="w-3 h-3 bg-green-500 rounded-full"></div>
            </div>
            <div class="mx-auto text-xs text-portfolio-muted flex items-center">
                <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                </svg>
                Developer.php
            </div>
        </div>

        <!-- Laravel Code Editor Content -->
        <div class="p-6 text-sm font-mono overflow-x-auto text-gray-300 leading-loose">
            <div><span class="text-purple-400">&lt;?php</span></div>

            <div><span class="text-purple-400">namespace</span> <span class="text-blue-400">App\Developers</span>;</div>
            <div><span class="text-purple-400">class</span> <span class="text-green-400">Developer</span></div>
            <div>{</div>

            <div class="ml-4">
                <span class="text-purple-400">public string</span> <span class="text-blue-400">$name</span> = <span class="text-yellow-300">'Hannan Sarkar'</span>;
            </div>

            <div class="ml-4">
                <span class="text-purple-400">public string</span> <span class="text-blue-400">$role</span> = <span class="text-yellow-300">'Web Developer'</span>;
            </div>

            <div class="ml-4">
                <span class="text-purple-400">public array</span> <span class="text-blue-400">$skills</span> = [
            </div>

            <div class="ml-8">
                <span class="text-yellow-300">'PHP'</span>,
                <span class="text-yellow-300">'Laravel'</span>,
            </div>

            <div class="ml-8">
                <span class="text-yellow-300">'MySQL'</span>,
                <span class="text-yellow-300">'Tailwind CSS'</span>
            </div>

            <div class="ml-4">];</div>

            <div class="ml-4">
                <span class="text-purple-400">public function</span> <span class="text-green-400">isHardWorker</span>(): bool
            </div>
            <div class="ml-4">{</div>
            <div class="ml-8">
                <span class="text-purple-400">return</span> <span class="text-orange-400">true</span>;
            </div>
            <div class="ml-4">}</div>

            <div class="ml-4">
                <span class="text-purple-400">public function</span> <span class="text-green-400">hireMe</span>(): bool
            </div>
            <div class="ml-4">{</div>

            <div class="ml-8 text-gray-500 italic">
                // Let's build something amazing together!
            </div>

            <div class="ml-8">
                <span class="text-purple-400">return</span> <span class="text-orange-400">true</span>;
            </div>

            <div class="ml-4">}</div>

            <div>}</div>
        </div>

        <!-- Decorative glow effect -->
        <div class="absolute -inset-1 bg-gradient-to-r from-portfolio-accent to-blue-600 rounded-xl blur opacity-20 group-hover:opacity-30 transition duration-1000 group-hover:duration-200 z-[-1]"></div>
    </div>
</div>
        </div>
    </div>
</header>
