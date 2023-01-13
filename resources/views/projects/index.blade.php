@extends('layouts.app')

@section('content')
<header class="d-flex justify-content-between align-items-center my-5" dir="rtl">
    <div class="h6 text-dark">
        <a href="/projects">المشاريع</a>
    </div>

    <div>
        <a href="/projects/create" class="btn btn-primary px-4" role="button">مشروع جديد</a>
    </div>
</header>

<section>
    <div class="row row-s">
        @forelse($projects as $project)
            <div class="col-4 mb-4">
                <div class="card text-right" style="height: 230px">
                    <div class="card-body">
                        <div class="status">
                            @switch($project->status)
                            @case(1)
                                <span class="text-success fs-6 fw-bold">مكتمل</span>
                            @break
                            @case(2)
                                <span class="text-danger fs-6 fw-bold">ملغي</span>
                            @break
                            @default
                                <span class="text-warning fs-6 fw-bold">قيد الإنجاز</span>
                            @endswitch
                            <h5 class="font-weight-bold card-title">
                                <a href="/projects/{{ $project->id }}">{{ $project->title }}</a>
                            </h5>

                            <div class="card-text mt-4">
                                {{ Str::limit($project->description, 150) }}
                            </div>
                        </div>
                    </div>
                    @include('projects.footer')
                </div>
            </div>
            @empty
            <div class="m-auto align-content-center text-center">
                <p>لوحة العمل الخاصة بك خاليو من المشاديع ما رأيك بعمل مشروع جديد؟</p>
                <div class="mt-5">
                    <a href="/projects/create" class="btn btn-primary btn-lg d-inline-flex align-items-center" role="button">انشئ مشروعاً الآن</a>
                </div>
            </div>
        @endforelse
    </div>
</section>
@endsection
