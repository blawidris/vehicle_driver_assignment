 <tr>
     <td>{{ $assigned->vehicle->model }}</td>
     <td>{{ $assigned->driver->name }}</td>
     <td>{{ date('d.m.Y', strtotime($assigned->assigned_date)) }}</td>
     <td>
         <div class="d-inline-flex align-items-center gap-1">
             {{-- <button class="btn btn-primary fs-6"><i class="bi bi-eye"></i></button> --}}
             <a href='{{ route('vehicle.view', ['slug' => $assigned->id]) }}' class="btn btn-warning fs-6"><i
                     class="bi bi-eye"></i></a>
             <a href='{{ route('vehicle.view', ['slug' => $assigned->id]) }}' class="btn btn-primary fs-6">
                 <i class="bi bi-pencil"></i>
             </a>
             <button class="btn btn-danger fs-6"><i class="bi bi-x"></i></button>
         </div>
     </td>
 </tr>
