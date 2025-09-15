<x-layout>
    <x-slot:heading>
        Contact
    </x-slot:heading>
    <div class="flex ">
    <section>
        <div id="about-page" class="py-20 px-6 sm:px-12">
            <div class="mx-auto max-w-4xl text-center">
                <h2 class="text-3xl font-bold text-white mb-6">About Job Star</h2>
                <p class="text-lg text-slate-400 mb-8">
                    Job Star was founded on a simple principle: finding a remote job should be simple, safe, and effective. We were tired of endless scrolling through scammy listings and outdated job boards. So, we decided to build a platform that does the hard work for you.
                </p>
                <p class="text-lg text-slate-400 mb-8">
                    Our mission is to connect talented professionals with legitimate, high-quality remote opportunities from companies that truly value flexible work. Every listing on our site is hand-picked and verified by our team, ensuring you can focus on what matters: landing your next career move.
                </p>
                <img src="https://placehold.co/600x400/2a3d4f/ffffff?text=Our+Team" alt="Our Team" class="rounded-xl mx-auto mb-8 shadow-lg">
                <p class="text-lg text-slate-400">
                    We're a small, passionate team of remote workers ourselves, committed to helping you navigate the remote job market with confidence.
                </p>
            </div>
        </div>
    </section>
    <section>
        <div id="contact-page" class="py-20 px-6 sm:px-12">
            <div class="mx-auto max-w-3xl">
                <h2 class="text-3xl font-bold text-white mb-6 text-center">Get In Touch</h2>
                <p class="text-lg text-slate-400 mb-8 text-center">
                    Have a question, feedback, or a partnership inquiry? We'd love to hear from you. Fill out the form below and we'll get back to you as soon as possible.
                </p>
                <form class="bg-slate-800 rounded-xl p-8 shadow-xl border border-slate-700">
                    <div class="mb-6">
                        <label for="name" class="block text-sm font-medium text-slate-400 mb-2">Full Name</label>
                        <input type="text" id="name" name="name" class="block w-full rounded-md bg-slate-700/50 border-slate-600 focus:border-teal-500 focus:ring-teal-500 text-white" placeholder="John Doe">
                    </div>
                    <div class="mb-6">
                        <label for="email" class="block text-sm font-medium text-slate-400 mb-2">Email Address</label>
                        <input type="email" id="email" name="email" class="block w-full rounded-md bg-slate-700/50 border-slate-600 focus:border-teal-500 focus:ring-teal-500 text-white" placeholder="you@example.com">
                    </div>
                    <div class="mb-6">
                        <label for="message" class="block text-sm font-medium text-slate-400 mb-2">Message</label>
                        <textarea id="message" name="message" rows="4" class="block w-full rounded-md bg-slate-700/50 border-slate-600 focus:border-teal-500 focus:ring-teal-500 text-white" placeholder="Your message..."></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="bg-teal-500 hover:bg-teal-600 transition-colors duration-200 text-white font-semibold py-3 px-6 rounded-full">
                            Send Message
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    </div>
</x-layout>
