<div class="card-footer" dir="rtl">
    <div class="d-flex justify-content-between">
        <div class="d-flex align-items-center gap-2">
            <img src="/images/clock.svg" alt="">
            <div class="mr-2">
                {{$project->created_at->diffForHumans()}}
            </div>
            <img src="/images/list-check.svg" alt="list">
            <div class="mr-2">
                {{ count($project->tasks) }}
            </div>
        </div>
        <div class="d-flex align-items-center mr-auto">
            <form action="/projects/{{$project->id}}" method="POST">
                @method('DELETE')
                @csrf
                <input type="submit" class="btn-delete" value="">
            </form>
        </div>
    </div>
</div>
