<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio of Hannan Sarkar - Full Stack Developer">
    <title>{{ $title ?? 'Hannan Sarkar | Portfolio' }}</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="{{ asset('favicon2.png') }}" type="image/png">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-portfolio-bg text-portfolio-text h-full font-sans antialiased selection:bg-portfolio-accent/30">
    <!-- Decorative Background Elements -->
    <div class="fixed inset-0 z-[-1] overflow-hidden pointer-events-none">
        <div class="absolute top-[-10%] left-[-10%] w-[40%] h-[40%] rounded-full bg-teal-900/20 blur-[100px] animate-blob"></div>
        <div class="absolute top-[20%] right-[-10%] w-[35%] h-[35%] rounded-full bg-blue-900/20 blur-[100px] animate-blob animation-delay-2000"></div>
        <div class="absolute bottom-[-10%] left-[20%] w-[40%] h-[40%] rounded-full bg-emerald-900/10 blur-[120px] animate-blob animation-delay-4000"></div>
    </div>

    <div class="w-full relative z-0 flex flex-col min-h-screen">
        <main class="flex-grow">
            {{ $slot }}
        </main>
        
        <!-- Contact Section -->
        <section id="contact" class="py-20 animate-on-scroll">
            <div class="container px-6 mx-auto text-center">
                <h2 class="text-3xl font-bold text-white lg:text-4xl font-outfit mb-4">
                    Get in Touch
                </h2>
                <p class="text-portfolio-muted mb-8 max-w-xl mx-auto">
                    Whether you have a question or just want to say hi, I'll try my best to get back to you!
                </p>
                <a href="mailto:hannansarkar84@gmail.com" class="inline-flex items-center px-6 py-3 border border-portfolio-accent text-portfolio-accent hover:bg-portfolio-accent hover:text-portfolio-bg rounded-md transition-colors duration-300 font-medium font-outfit">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    hannansarkar84@gmail.com
                </a>
                
                <div class="flex justify-center gap-6 mt-12">
                    <a href="https://github.com/Hannan84" class="text-portfolio-muted hover:text-portfolio-accent transition-colors duration-300">
                        <span class="sr-only">GitHub</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"/></svg>
                    </a>
                    <a href="https://www.linkedin.com/in/hannan-sarkar/" class="text-portfolio-muted hover:text-portfolio-accent transition-colors duration-300">
                        <span class="sr-only">LinkedIn</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" clip-rule="evenodd"/></svg>
                    </a>
                </div>
            </div>
        </section>
        
        <!-- Footer -->
        <footer class="py-6 border-t border-portfolio-card text-center">
            <p class="text-sm text-portfolio-muted">
                Designed & Built by Hannan Sarkar &copy; {{ date('Y') }}
            </p>
        </footer>
    </div>
</body>
</html>
