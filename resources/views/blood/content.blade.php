
<div class="container">
    @foreach ($contents as $content)
        Id:{{ $content->id }}&nbsp;
        Title:{{ $content->title }}&nbsp;&nbsp;
        Media:{{ $content->media }}&nbsp;&nbsp;
        Type:{{ $content->type }}&nbsp;&nbsp;
        Status:{{ $content->status }}&nbsp;&nbsp;
        Time:{{ $content->created_at }}&nbsp;&nbsp;
        PublishMan:{{ $content->username }}<br><br>
    @endforeach
</div>

{{ $contents->links() }}