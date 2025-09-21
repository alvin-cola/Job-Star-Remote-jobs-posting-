<x-layout>
    <x-slot:heading>
        Home Page
    </x-slot:heading>
    <div class="relative w-full  flex flex-col items-center justify-center p-6 text-center overflow-hidden ">
        <canvas id="hero-canvas"></canvas>
        <h1 class="relative text-3xl sm:text-5xl md:text-7xl font-bold tracking-tight text-white mb-6 animate-fade-in">Find Your Dream Remote Job.</h1>
        <p class="relative text-lg sm:text-xl text-slate-400 max-w-2xl mb-10 animate-fade-in delay-200">
            Expert-verified, scam-free jobs from top companies, near you and across the globe.
        </p>
        <form  method="get" action="{{route('search')}}" class="relative w-full max-w-2xl flex rounded-full bg-slate-800/80 p-2 shadow-xl border border-slate-700 backdrop-blur-sm animate-slide-up delay-400">
            @csrf
            <input type="text" name='q' placeholder="Search by keyword, title, or company..." class="w-full flex-1 rounded-full bg-transparent px-4 py-3 text-slate-300 placeholder-slate-500 focus:outline-none focus:ring-0">
            <button type="submit" class="shrink-0 rounded-full bg-teal-500 px-6 py-3 font-semibold text-white hover:bg-teal-600 transition-colors duration-200">Search Jobs</button>
        </form>
    </div>
    <div class="space-y-10">
        <section class="space-y-4">
            <x-section-header>Featured Jobs</x-section-header>
            <div class="grid lg:grid-cols-3 gap-8">
                @foreach($FeaturedJobs as $job)

                    <x-job-card :$job />

                @endforeach
            </div>
        </section>
        <section class="space-y-4">
            <x-section-header>Tags</x-section-header>
            <div>

                    @foreach($tags as $tag)
                    <x-tag  :$tag/>
                    @endforeach

            </div>


        </section>
        <section class="space-y-4">
            <x-section-header>Top Jobs</x-section-header>
            <div class="space-y-6">
                @foreach($jobs as $job)

                <x-job-card-wide :$job />

                @endforeach
            </div>
        </section>

    </div>
    <!-- Value Proposition Section -->
    <section class="py-20 px-6 sm:px-12 bg-slate-900">
        <div class="mx-auto max-w-7xl">
            <h2 class="text-3xl font-bold text-center text-white mb-12">Why Choose Job Star?</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <!-- Value Prop 1 -->
                <div class="bg-slate-800 rounded-xl p-8 shadow-lg transform hover:scale-105 transition-transform duration-300 border border-slate-700">
                    <div class="text-teal-500 w-16 h-16 flex items-center justify-center mb-4 rounded-full bg-slate-700/50">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Expert-Verified Listings</h3>
                    <p class="text-slate-400">Our team verifies every single job posting to ensure it's legitimate and scam-free, so you can apply with confidence.</p>
                </div>
                <!-- Value Prop 2 -->
                <div class="bg-slate-800 rounded-xl p-8 shadow-lg transform hover:scale-105 transition-transform duration-300 border border-slate-700">
                    <div class="text-teal-500 w-16 h-16 flex items-center justify-center mb-4 rounded-full bg-slate-700/50">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Save Time</h3>
                    <p class="text-slate-400">Go straight from job listings to applications. No more hopping from one job board to the next—we've done the hard work for you.</p>
                </div>
                <!-- Value Prop 3 -->
                <div class="bg-slate-800 rounded-xl p-8 shadow-lg transform hover:scale-105 transition-transform duration-300 border border-slate-700">
                    <div class="text-teal-500 w-16 h-16 flex items-center justify-center mb-4 rounded-full bg-slate-700/50">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2v2m-4-2h-4a2 2 0 00-2 2v2a2 2 0 002 2h4a2 2 0 002-2v-2a2 2 0 00-2-2zM4 16a2 2 0 012-2h4a2 2 0 012 2v4a2 2 0 01-2 2H6a2 2 0 01-2-2v-4z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Privacy & Support</h3>
                    <p class="text-slate-400">We never sell your personal data. Ever. Our friendly team is always here to help you on your remote job search journey.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Companies Section -->
    <section class="py-20 px-6 sm:px-12">
        <div class="mx-auto max-w-7xl">
            <h2 class="text-3xl font-bold text-center text-white mb-12">Awesome Companies Hiring Remote Talent</h2>
            <div class="overflow-hidden relative w-full">
                <div id="logo-slider" class="flex items-center space-x-12 animate-scroll">
                    <!-- Duplicated for seamless loop -->
                    <img class="h-12 grayscale opacity-50 hover:grayscale-0 hover:opacity-100 transition-all duration-300" src="https://placehold.co/120x48/2a3d4f/ffffff?text=Google" alt="Google">
                    <img class="h-12 grayscale opacity-50 hover:grayscale-0 hover:opacity-100 transition-all duration-300" src="https://placehold.co/120x48/2a3d4f/ffffff?text=Microsoft" alt="Microsoft">
                    <img class="h-12 grayscale opacity-50 hover:grayscale-0 hover:opacity-100 transition-all duration-300" src="https://placehold.co/120x48/2a3d4f/ffffff?text=Amazon" alt="Amazon">
                    <img class="h-12 grayscale opacity-50 hover:grayscale-0 hover:opacity-100 transition-all duration-300" src="https://placehold.co/120x48/2a3d4f/ffffff?text=HubSpot" alt="HubSpot">
                    <img class="h-12 grayscale opacity-50 hover:grayscale-0 hover:opacity-100 transition-all duration-300" src="https://placehold.co/120x48/2a3d4f/ffffff?text=Shopify" alt="Shopify">
                    <img class="h-12 grayscale opacity-50 hover:grayscale-0 hover:opacity-100 transition-all duration-300" src="https://placehold.co/120x48/2a3d4f/ffffff?text=Stripe" alt="Stripe">
                    <img class="h-12 grayscale opacity-50 hover:grayscale-0 hover:opacity-100 transition-all duration-300" src="https://placehold.co/120x48/2a3d4f/ffffff?text=Slack" alt="Slack">
                    <img class="h-12 grayscale opacity-50 hover:grayscale-0 hover:opacity-100 transition-all duration-300" src="https://placehold.co/120x48/2a3d4f/ffffff?text=Airbnb" alt="Airbnb">
                    <img class="h-12 grayscale opacity-50 hover:grayscale-0 hover:opacity-100 transition-all duration-300" src="https://placehold.co/120x48/2a3d4f/ffffff?text=GitLab" alt="GitLab">
                    <img class="h-12 grayscale opacity-50 hover:grayscale-0 hover:opacity-100 transition-all duration-300" src="https://placehold.co/120x48/2a3d4f/ffffff?text=Netflix" alt="Netflix">
                    <img class="h-12 grayscale opacity-50 hover:grayscale-0 hover:opacity-100 transition-all duration-300" src="https://placehold.co/120x48/2a3d4f/ffffff?text=Spotify" alt="Spotify">
                    <img class="h-12 grayscale opacity-50 hover:grayscale-0 hover:opacity-100 transition-all duration-300" src="https://placehold.co/120x48/2a3d4f/ffffff?text=Zapier" alt="Zapier">

                    <!-- Repeat logos to ensure seamless loop -->
                    <img class="h-12 grayscale opacity-50 hover:grayscale-0 hover:opacity-100 transition-all duration-300" src="https://placehold.co/120x48/2a3d4f/ffffff?text=Google" alt="Google">
                    <img class="h-12 grayscale opacity-50 hover:grayscale-0 hover:opacity-100 transition-all duration-300" src="https://placehold.co/120x48/2a3d4f/ffffff?text=Microsoft" alt="Microsoft">
                    <img class="h-12 grayscale opacity-50 hover:grayscale-0 hover:opacity-100 transition-all duration-300" src="https://placehold.co/120x48/2a3d4f/ffffff?text=Amazon" alt="Amazon">
                    <img class="h-12 grayscale opacity-50 hover:grayscale-0 hover:opacity-100 transition-all duration-300" src="https://placehold.co/120x48/2a3d4f/ffffff?text=HubSpot" alt="HubSpot">
                    <img class="h-12 grayscale opacity-50 hover:grayscale-0 hover:opacity-100 transition-all duration-300" src="https://placehold.co/120x48/2a3d4f/ffffff?text=Shopify" alt="Shopify">
                    <img class="h-12 grayscale opacity-50 hover:grayscale-0 hover:opacity-100 transition-all duration-300" src="https://placehold.co/120x48/2a3d4f/ffffff?text=Stripe" alt="Stripe">
                    <img class="h-12 grayscale opacity-50 hover:grayscale-0 hover:opacity-100 transition-all duration-300" src="https://placehold.co/120x48/2a3d4f/ffffff?text=Slack" alt="Slack">
                    <img class="h-12 grayscale opacity-50 hover:grayscale-0 hover:opacity-100 transition-all duration-300" src="https://placehold.co/120x48/2a3d4f/ffffff?text=Airbnb" alt="Airbnb">
                    <img class="h-12 grayscale opacity-50 hover:grayscale-0 hover:opacity-100 transition-all duration-300" src="https://placehold.co/120x48/2a3d4f/ffffff?text=GitLab" alt="GitLab">
                    <img class="h-12 grayscale opacity-50 hover:grayscale-0 hover:opacity-100 transition-all duration-300" src="https://placehold.co/120x48/2a3d4f/ffffff?text=Netflix" alt="Netflix">
                    <img class="h-12 grayscale opacity-50 hover:grayscale-0 hover:opacity-100 transition-all duration-300" src="https://placehold.co/120x48/2a3d4f/ffffff?text=Spotify" alt="Spotify">
                    <img class="h-12 grayscale opacity-50 hover:grayscale-0 hover:opacity-100 transition-all duration-300" src="https://placehold.co/120x48/2a3d4f/ffffff?text=Zapier" alt="Zapier">
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-20 px-6 sm:px-12 bg-slate-900">
        <div class="mx-auto max-w-4xl text-center">
            <h2 class="text-3xl font-bold text-white mb-12">Hear From Our Happy Users</h2>
            <div class="relative">
                <div id="testimonial-slider" class="testimonial-slider-container">
                    <!-- Testimonial 1 -->
                    <div class="testimonial-card p-6 sm:p-10 bg-slate-800 rounded-xl shadow-xl border border-slate-700 mx-4 shrink-0">
                        <p class="text-lg text-slate-300 mb-6 italic">"Job Star helped me find a fully remote position that perfectly fits my skills. The listings are high-quality, and I didn't have to waste time filtering out scams. Highly recommended!"</p>
                        <div class="flex items-center justify-center">
                            <img src="https://placehold.co/64x64/2a3d4f/ffffff?text=JS" alt="John Smith" class="rounded-full mr-4">
                            <div>
                                <h4 class="text-white font-semibold">Jane Doe</h4>
                                <p class="text-sm text-slate-400">Software Engineer, San Francisco</p>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial 2 -->
                    <div class="testimonial-card p-6 sm:p-10 bg-slate-800 rounded-xl shadow-xl border border-slate-700 mx-4 shrink-0">
                        <p class="text-lg text-slate-300 mb-6 italic">"The verified jobs feature is a game-changer. I saved countless hours of research. I found my new role as a remote Project Manager within two weeks of using Job Star."</p>
                        <div class="flex items-center justify-center">
                            <img src="https://placehold.co/64x64/2a3d4f/ffffff?text=AS" alt="Alex Smith" class="rounded-full mr-4">
                            <div>
                                <h4 class="text-white font-semibold">Alex Smith</h4>
                                <p class="text-sm text-slate-400">Project Manager, New York</p>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial 3 -->
                    <div class="testimonial-card p-6 sm:p-10 bg-slate-800 rounded-xl shadow-xl border border-slate-700 mx-4 shrink-0">
                        <p class="text-lg text-slate-300 mb-6 italic">"I was skeptical at first, but the quality of the job listings is incredible. The privacy and support made me feel secure in my job search. Thank you, Job Star!"</p>
                        <div class="flex items-center justify-center">
                            <img src="https://placehold.co/64x64/2a3d4f/ffffff?text=CB" alt="Chris Brown" class="rounded-full mr-4">
                            <div>
                                <h4 class="text-white font-semibold">Chris Brown</h4>
                                <p class="text-sm text-slate-400">Marketing Specialist, London</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Navigation Buttons -->
                <button id="prev-testimonial" class="absolute top-1/2 left-0 -translate-y-1/2 bg-slate-700/50 text-white rounded-full p-2 hover:bg-slate-600 transition-colors duration-200 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                </button>
                <button id="next-testimonial" class="absolute top-1/2 right-0 -translate-y-1/2 bg-slate-700/50 text-white rounded-full p-2 hover:bg-slate-600 transition-colors duration-200 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </button>
            </div>
        </div>
    </section>

    <!-- Final CTA Section -->
    <section class="py-20 px-6 sm:px-12 bg-slate-950 text-center">
        <div class="mx-auto max-w-4xl">
            <h2 class="text-3xl sm:text-4xl font-bold text-white mb-6">Ready to Find Your Next Remote Role?</h2>
            <p class="text-lg text-slate-400 mb-8">Join thousands of others who have successfully launched their remote careers with Job Star. It's time to find the job you've been searching for.</p>
            <x-button href="{{route('jobs.index')}}" class="bg-teal-500 hover:bg-teal-600 transition-colors duration-300 text-white font-semibold py-4 px-8 rounded-full shadow-lg text-lg">
                Start Your Remote Job Search Now!
            </x-button>
        </div>
    </section>


</x-layout>
