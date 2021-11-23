<table>
    <thead>
    <tbody>
    @foreach($rows as $row)
        <tr>
            <td>{{ $loop->index }}</td>
            <td>{{ $row->form_title }}</td>
            <td>{{ $row->agent_name }}</td>
            <td>{{ $row->agent_email }}</td>
            <td>{{ $row->status ? 'True':'False' }}</td>
            @foreach (json_decode(html_entity_decode($row->details), true) as $key => $detail)
                <td>{{ucwords(str_replace('_', ' ', $key)) . ' - ' . $detail}}</td>
            @endforeach
        </tr>
    @endforeach
    </tbody>
</table>
