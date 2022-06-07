<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Form Title</th>
            <th>Agent Name</th>
            <th>Agent Email</th>
            <th>Form Status</th>
            <th>Created At</th>
            @foreach ($rows as $row)
                @if ($loop->first)
                    @foreach (json_decode(html_entity_decode($row->details), true) as $key => $detail)
                        @if ($key != 'form_agent_full_name' && $key != 'form_agent_email' && $key != 'form_title' && $key != 'agent_full_name' && $key != 'agent_email')
                            <td>{{ ucwords(str_replace('_', ' ', $key)) }}</td>
                        @endif
                    @endforeach
                @else
                @break
            @endif
            <th></th>
        @endforeach
    </tr>
</thead>
<tbody>
    @foreach ($rows as $row)
        <tr>
            <td>{{ $loop->index }}</td>
            <td>{{ $row->form_title }}</td>
            <td>{{ $row->agent_name }}</td>
            <td>{{ $row->agent_email }}</td>
            <td>{{ $row->status ? 'True' : 'False' }}</td>
            <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $row->created_at, 'UTC')->setTimezone('America/New_York') }}
            </td>
            @foreach (json_decode(html_entity_decode($row->details), true) as $key => $detail)
                @if (preg_match('(storage/images/marketing|marketing)', $detail))
                    <td><a href="{{ route('form.file.download') }}?path={{ $detail }}">Click to download</a>
                    </td>
                @else
                    @if ($key != 'form_agent_full_name' && $key != 'form_agent_email' && $key != 'form_title' && $key != 'agent_full_name' && $key != 'agent_email')
                        <td>{{ $detail }}</td>
                    @endif
                @endif
            @endforeach
        </tr>
    @endforeach
</tbody>
</table>
