<x-layout>
    <x-slot:heading>
        Job Listings
    </x-slot:heading>

    <table style="border-collapse: collapse; width: 100%; border: 1px solid black;">
        <thead>
        <tr style="border-bottom: 2px solid black;">
            <th style="padding: 5px; text-align: left;">Title</th>
            <th style="padding: 5px; text-align: left;">Salary</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($jobs as $job)
            <tr>
                <td style="padding: 5px;"><a href="/jobs/{{ $job['id'] }}" style="
    display: inline-block;
    padding: 10px 15px;
    background-color: #007bff;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    font-weight: bold;
    transition: background-color 0.3s ease;
"
                                             onmouseover="this.style.backgroundColor='#0056b3'"
                                             onmouseout="this.style.backgroundColor='#007bff'">
                        {{ $job['title'] }}
                    </a>
                </td>
                <td style="padding: 5px;">{{ $job['salary'] }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</x-layout>
