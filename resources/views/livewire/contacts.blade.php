<div>
    Contacts
    <button type="button" class="btn btn-primary" wire:navigate href="/contacts/create">Create</button>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Company</th>
                <th scope="col">Phone</th>
                <th scope="col">Email</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
                <tr>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->company }}</td>
                    <td>(+{{ $contact->country_code }}) {{ $contact->phone }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>
                        <button type="button" class="btn btn-warning" wire:navigate href="/contacts/edit/{{ $contact->id }}">Edit</button>
                        <button type="button" class="btn btn-danger" wire:click="delete({{ $contact->id }})">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $contacts->links() }}
</div>
