<section class="relative w-full overflow-hidden bg-[#1a1a1a]" style="height: clamp(380px, 50vw, 620px)" id="hero-slider">
    @foreach($heroSlides as $index => $slide)
        <div class="hero-slide absolute inset-0 transition-opacity duration-1000 {{ $index === 0 ? 'z-10 opacity-100' : 'z-0 opacity-0' }}" data-index="{{ $index }}">
            <img src="{{ asset($slide['image']) }}" alt="{{ $slide['subtitle'] }}" class="h-full w-full object-cover {{ $index === 0 ? 'hero-bg-animate' : '' }}" {{ $index === 0 ? '' : 'loading=lazy' }} width="1920" height="620">
            <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-black/10 hero-overlay-animate"></div>
            <div class="absolute inset-0 bg-gradient-to-l from-black/30 via-transparent to-transparent hero-overlay-animate"></div>
        </div>
    @endforeach

    <!-- Text content card -->
    <div class="absolute inset-0 z-20 flex items-end justify-center pb-16 md:items-center md:justify-end md:pb-0 md:pr-[8%]">
        <div class="relative max-w-[520px] px-6 md:px-0">
            <div class="relative rounded-sm bg-black/50 backdrop-blur-sm px-8 py-8 md:px-10 md:py-10 hero-title-animate">
                <div class="absolute left-0 top-0 h-1 w-16 bg-[var(--color-brand-red)]"></div>
                <div class="absolute left-0 top-0 h-16 w-1 bg-[var(--color-brand-red)]"></div>
                <h2 id="hero-title" class="text-[22px] font-black uppercase leading-tight tracking-wide text-white md:text-[28px] lg:text-[32px]">
                    {!! nl2br(e($heroSlides[0]['title'])) !!}
                </h2>
                <p id="hero-description" class="mt-4 text-[13px] leading-relaxed text-white/75 md:text-[14px]">
                    {{ $heroSlides[0]['description'] }}
                </p>
            </div>
        </div>
    </div>

    <!-- Nav Arrows -->
    <button class="hero-prev absolute left-0 top-1/2 z-30 -translate-y-1/2 flex h-12 w-10 items-center justify-center bg-[var(--color-brand-red)] text-white cursor-pointer md:h-14 md:w-11" aria-label="Slide trước">
        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path d="m15 18-6-6 6-6"/></svg>
    </button>
    <button class="hero-next absolute right-0 top-1/2 z-30 -translate-y-1/2 flex h-12 w-10 items-center justify-center bg-[var(--color-brand-red)] text-white cursor-pointer md:h-14 md:w-11" aria-label="Slide sau">
        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path d="m9 18 6-6-6-6"/></svg>
    </button>

    <!-- Dots -->
    <div class="absolute bottom-5 left-1/2 z-30 flex -translate-x-1/2 gap-2">
        @foreach($heroSlides as $index => $slide)
            <button class="hero-dot h-[3px] rounded-full transition-all duration-300 cursor-pointer {{ $index === 0 ? 'w-8 bg-[var(--color-brand-red)]' : 'w-4 bg-white/40' }}" data-index="{{ $index }}" aria-label="Slide {{ $index + 1 }}"></button>
        @endforeach
    </div>
</section>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const slides = @json($heroSlides);
        const slideEls = document.querySelectorAll('.hero-slide');
        const dots = document.querySelectorAll('.hero-dot');
        const titleEl = document.getElementById('hero-title');
        const descEl = document.getElementById('hero-description');
        let current = 0;
        let timer;

        function goTo(index) {
            slideEls.forEach((s, i) => {
                s.classList.toggle('z-10', i === index);
                s.classList.toggle('opacity-100', i === index);
                s.classList.toggle('z-0', i !== index);
                s.classList.toggle('opacity-0', i !== index);
            });
            dots.forEach((d, i) => {
                d.classList.toggle('w-8', i === index);
                d.classList.toggle('bg-[var(--color-brand-red)]', i === index);
                d.classList.toggle('w-4', i !== index);
                d.classList.toggle('bg-white/40', i !== index);
            });
            titleEl.innerHTML = slides[index].title.replace(/\n/g, '<br>');
            descEl.textContent = slides[index].description;
            current = index;
        }

        function next() { goTo((current + 1) % slides.length); }
        function prev() { goTo((current - 1 + slides.length) % slides.length); }
        function startTimer() { timer = setInterval(next, 6000); }
        function resetTimer() { clearInterval(timer); startTimer(); }

        document.querySelector('.hero-next').addEventListener('click', () => { next(); resetTimer(); });
        document.querySelector('.hero-prev').addEventListener('click', () => { prev(); resetTimer(); });
        dots.forEach(d => d.addEventListener('click', () => { goTo(parseInt(d.dataset.index)); resetTimer(); }));
        startTimer();
    });
</script>
@endpush
