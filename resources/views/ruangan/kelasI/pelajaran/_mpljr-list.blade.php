@foreach ($mpl as $field)
    <!-- category list -->
    <tbody>
    <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center pr-0">
        <label class="mt-auto mb-auto">
        <!-- todo: show category title -->
            {{ str_repeat('~', $count).' '.  $field->judul }}
        </label>
        <div>
        <!-- detail -->
        <a href="#" class="btn btn-sm btn-primary" role="button">
            <i class="fas fa-eye"></i>
        </a>
        <!-- edit -->
        <a href="{{ route('rkelassatu.mpljr.edit', $field->id) }}" class="btn btn-sm btn-info" role="button">
            <i class="fas fa-edit"></i>
        </a>

        <!-- delete -->
        <a href="{{ route('rkelassatu.mpljr.delete', $field->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Are You Sure?')" role="button">
            <i class="fas fa-trash"></i>
        </a>
        </div>
        <!-- todo:show subcategory -->
        @if ($field->children)
            @include('ruangan.kelasI.pelajaran._mpljr-list',[
                'mpl' => $field->children,
                'count' => $count + 1
            ])
        @endif
    </li>
    <!-- end category list -->
@endforeach


