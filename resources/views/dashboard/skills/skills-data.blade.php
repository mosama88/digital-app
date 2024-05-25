<div>
    <div class="col-3 mb-3 my-3 mx-2">
        <input type="search" wire:model.live='search' class="form-control" placeholder="Search Here">
    </div>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Progress</th>
                    <th>Actions</th>
                </tr>
            </thead>
            @if (count($data) > 0)
                <tbody class="table-border-bottom-0">
                    @foreach ($data as $record)
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                <strong>{{ $record->name }}</strong>
                            </td>
                            <td>{{ $record->progress }} %</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                class="bx bx-edit-alt me-1"></i>
                                            Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                class="bx bx-trash me-1"></i>
                                            Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            @else
                <h3 class="text-center mt-2">There are not data</h3>
            @endif

        </table>
    </div>

    <div class="mt-4">
        {{ $data->links() }}
    </div>

</div>
