<x-layout>
    <x-slot:heading>
        Job Listings
    </x-slot:heading>

    <div style="display: flex; justify-content: center;">
        <table style="border-collapse: collapse; width: 80%; border: 1px solid black;">
            <thead>
            <tr style="border-bottom: 2px solid black;">
                <th style="padding: 5px; text-align: left;">Title</th>
                <th style="padding: 5px; text-align: right;">Salary</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($jobs as $job)
                <tr>
                    <td style="padding: 5px 20px 5px 5px;text-align: left;">
                        <a href="/jobs/{{ $job['id'] }}" style="
                        display: inline-block;
                        padding: 10px 15px;
                        background-color: #43464a;
                        color: white;
                        text-decoration: none;
                        border-radius: 50px;
                        font-weight: bold;
                        transition: background-color 0.3s ease;
                    "
                           onmouseover="this.style.backgroundColor='#8e969e'"
                           onmouseout="this.style.backgroundColor='#43464a'">
                            {{ $job['title'] ?? 'Untitled job' }}
                        </a>
                    </td>
                    <td style="padding: 5px; text-align: right;">${{ number_format($job->salary, 2, '.', ',') }}</td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
    <div style="margin-top: 20px;">
        {{ $jobs->links() }}
    </div>

</x-layout>
