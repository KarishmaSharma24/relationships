@extends('layout.booklayout')
@section('title','Book')
@section('heading')
    <h2>Book Details</h2>
@endsection
@section('book-view')
    <table border=2 class="text-center">
        <tr>
            <th>id</th>
            <th>book name</th>
            <th>book author</th>
            <th>stu name</th>
            <th>published date</th>
            <th>author_id</th>
        </tr>
        @foreach ($bookData as $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->book_name }}</td>
            <td>{{ $value->book_author }}</td>
            <td>{{ $value->stu_name }}</td>
            <td>{{ $value->publish_date }}</td>
            <td>{{ $value->author_id }}</td>
        </tr>
        @endforeach
    </table>
@endsection

@section('footerlinks')
