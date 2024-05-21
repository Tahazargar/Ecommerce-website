<div id="mySlidenav" class="slidenav">
    <p class="logo"><span>R</span>exo<span>D</span>igi</p>
    <a href="{{ route('home') }}" class="icon-a">
        <span class="icon"><i class="fas fa-eye"></i></span>
        نمایش وب سایت
    </a>
    <a href="{{ route('dashboard') }}" class="icon-a">
        <span class="icon"><i class="fas fa-home"></i></span>
        داشبورد
    </a>

    @if(auth()->user()->role === 'admin')
    <a href="{{ route('topHeader.index') }}" class="icon-a @if(request()->is('dashboard/topHeader')) is-active @endif">
        <span class="icon"><i class="fas fa-ellipsis-h"></i></span>
        منوی بالایی
    </a>
    <a href="{{ route('hero.index') }}" class="icon-a @if(request()->is('dashboard/hero')) is-active @endif">
        <span class="icon"><i class="fas fa-laptop-house"></i></span>
        خانه
    </a>
    <a href="{{ route('about.index') }}" class="icon-a @if(request()->is('dashboard/about')) is-active @endif">
        <span class="icon"><i class="fas fa-address-card"></i></span>
        درباره ما
    </a>
        <a href="{{ route('header.index') }}" class="icon-a @if(request()->is('dashboard/header')) is-active @endif">
            <span class="icon"><i class="fas fa-bars"></i></span>
            سربرگ
        </a>
    <a href="{{ route('intro.index') }}" class="icon-a @if(request()->is('dashboard/intro')) is-active @endif">
        <span class="icon"><i class="fas fa-book-open"></i></span>
        مقدمه
    </a>
    <a href="{{ route('service.index') }}" class="icon-a @if(request()->is('dashboard/service')) is-active @endif">
        <span class="icon"><i class="fas fa-cogs"></i></span>
        خدمات
    </a>
    <a href="{{ route('team.index') }}" class="icon-a @if(request()->is('dashboard/team')) is-active @endif">
        <span class="icon"><i class="fas fa-user-friends"></i></span>
        تیم
    </a>
    <a href="{{ route('project.index') }}" class="icon-a @if(request()->is('dashboard/project')) is-active @endif">
        <span class="icon"><i class="fas fa-images"></i></span>
        نمونه کارها
    </a>
    <a href="{{ route('testimonial.index') }}" class="icon-a @if(request()->is('dashboard/testimonial')) is-active @endif">
        <span class="icon"><i class="fas fa-comment-alt"></i></span>
        نظرات مشتریان
    </a>
    <a href="{{ route('faq.index') }}" class="icon-a">
        <span class="icon"><i class="fas fa-headset"></i></span>
        سوالات متداول
    </a>


        <a href="#" class="icon-a sidebar-group-link">
        <span class="icon sidebar-dropdown-toggle">
            <i class="fas fa-clipboard-list"></i>
            فوتر
            <i class="fas fa-angle-left angle"></i>
        </span>
        </a>
        <section class="sidebar-dropdown">
            <a href="{{ route('footer.about.index') }}">درباره ما</a>
            <a href="{{ route('footer.service.index') }}">خدمات</a>
            <a href="{{ route('footer.quick.index') }}">دسترسی سریع</a>
            <a href="{{ route('footer.anyQuestion.index') }}">سوالی دارید</a>
        </section>


    <a href="{{ route('users.index') }}" class="icon-a @if(request()->is('dashboard/users')) is-active @endif">
        <span class="icon"><i class="fas fa-users"></i></span>
        کاربران
    </a>
    <a href="{{ route('counter.index') }}" class="icon-a @if(request()->is('dashboard/counter')) is-active @endif">
        <span class="icon"><i class="fas fa-globe"></i></span>
        بخش شمارنده
    </a>
    @endif
    @if(auth()->user()->role === 'admin' || auth()->user()->role === 'author')
    <a href="{{ route('comment.index') }}" @if(request()->is('dashboard/comment')) is-active @endif class="icon-a">
        <span class="icon"><i class="fas fa-comment"></i></span>
        نظرات
    </a>
    <a href="{{ route('contact.index') }}" class="icon-a">
        <span class="icon"><i class="fas fa-users"></i></span>
        پیام کاربران
    </a>
    <a href="{{ route('blog.index') }}" class="icon-a @if(request()->is('dashboard/blog')) is-active @endif">
        <span class="icon"><i class="fas fa-blog"></i></span>
        بلاگ
    </a>
    @endif
</div>
