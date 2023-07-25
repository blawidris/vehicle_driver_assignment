 <tr>
     <td>{{ $vehicle->maker }}</td>
     <td>{{ $vehicle->model }}</td>
     <td>{{ $vehicle->seating_capacity }}</td>
     <td>{{ $vehicle->license_plate }}</td>
     <td>
         <div class="d-inline-flex align-items-center gap-3">
             {{-- <button class="btn btn-primary fs-6"><i class="bi bi-eye"></i></button> --}}
             <a href='{{ route('vehicle.view', ['slug' => Str::slug($vehicle->model)]) }}' class="btn btn-warning fs-6"><i
                     class="bi bi-pencil"></i></a>
             <button class="btn btn-danger fs-6"><i class="bi bi-x"></i></button>
         </div>
     </td>
 </tr>
