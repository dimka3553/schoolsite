<x-site-layout>
    <ul>
        @foreach($schoolClasses as $schoolClass)
            <li>
                <span>{{$schoolClass->schoolyear}}</span>
                <span>{{$schoolClass->title}}</span>
                <span>{{$schoolClass->age_group}}</span>
                <span>{{$schoolClass->teacher}}</span>
            </li>
        @endforeach
    </ul>
</x-site-layout>
