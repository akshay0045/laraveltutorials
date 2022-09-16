-{{@$message}}
@php
$nums = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];
$nums2 = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];
@endphp
{{--@foreach($nums1 as $num1)
    @foreach($nums2 as $num2)
    @php
        dd($loop)
    @endphp
    @endforeach                
@endforeach--}}
@foreach($nums as $num)
<span style="color:green">{{$loop->remaining}}</span>
    @if($loop->first || $loop->last)
        <span style="color:#ccc">{{$num}}</span>                   
    @elseif($loop->odd)
        <span style="color:red">{{$num}}</span>                   
    @elseif($loop->even)
        <span style="color:blue">{{$num}}</span>                   
    @endif
    @if($loop->iteration % 4 == 0)
    <br/>
    @endif
@endforeach