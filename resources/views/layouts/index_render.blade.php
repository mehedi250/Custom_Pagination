<table class="table table-striped page-table" data-id='1'>
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
        </tr>
    </thead>
    <tbody>
        @php
        if(request()->row == null){
            $row = 0;
        }
        else{
            $row = request()->row;
        }

        $c = ($page-1)*$row;
        @endphp
        @forelse ($students as $item)
        <tr>
        <th scope="row">{{str_pad($c+$loop->index+1, 3, "0", STR_PAD_LEFT)}}</th>
        <td>{{$item->full_name}}</td>
        <td>{{$item->email}}</td>
        </tr>    
        @empty
        <tr>
            <td class="text-center" colspan="3">
                No data found!
            </td>
        </tr> 
        @endforelse
    </tbody>
</table>
<div class="row page-btn-box">
    <div class="col-md-4">
        <p class="page-item">Showing {{($row_view*($page-1))+1}} to {{($row_view*($page-1))+count($students)}} of {{$current_student_count}} entries</p>
    </div>
    <div class="col-md-8 text-end">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-end">
            <li class="page-item {{($page==1)?"disabled":"page-num"}}" data-id='-1'>
                <a class="page-link"  tabindex="-1">Previous</a>
            </li>
            
            @for ($i = 1; $i <= ceil($page_count); $i++)
                <li class="page-item page-num {{($page==$i)?"active":""}}" data-id='{{$i}}'><a class="page-link">{{$i}}</a></li>
            @endfor

            <li class="page-item  {{($page==$i-1)?"disabled":"page-num"}}" data-id='0'>
                <a class="page-link ">Next</a>
            </li>
            </ul>
        </nav>        
    </div>
</div>