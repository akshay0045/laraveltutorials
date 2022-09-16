@extends('layouts.posts')
@section('title', 'Create New Post')
@section('content')
    <!-- <form action="<?= route('posts.create') ?>" method="get">
    @csrf
        <input type="text" name="title" value="<?= old('title') ?>"/><br/>
        <textarea rows="10" cols="50" name="comments" ><?php print_r(old('comments')); ?></textarea><br/>
        <label>Computer<input type="checkbox" name="check[]" id="" value="computer" <?php echo old('check')  && in_array("computer", old('check')) ? "checked=checked" : '';  ?>></label>
        <label>Science<input type="checkbox" name="check[]" id="" value="Science" <?php echo old('check') && in_array("Science", old('check')) ? "checked=checked" : '';  ?>/></label>
        <label>Arts<input type="checkbox" name="check[]" id="" value="Arts" <?php echo old('check') && in_array("Arts", old('check')) ? "checked=checked" : '';  ?>></label>
        <label>Commerce<input type="checkbox" name="check[]" id="" value="Commerce" <?php echo old('check') && in_array("Commerce", old('check')) ? "checked=checked" : '';  ?>></label>
        <label>Mathes<input type="checkbox" name="check[]" id="" value="Mathes" <?php echo old('check') && in_array("Mathes", old('check')) ? "checked=checked" : '';  ?>></label>
        <button type="submit">Submit</button><br/>
    </form> -->
   

    <form action="<?= route('posts.store') ?>" method="POST" enctype="multipart/form-data">
    @csrf
        <input type="text" name="title" value="{{old('title')}}"/>
        {{-- @if($errors->has('title')) 
            @foreach ($errors->get('title') as $error) 
                <br/><span style="color:red">{{$error}}</span><br/>
            @endforeach
        @endif--}}
        @error('title')
        <br/><span style="color:red">{{$message}}</span><br/>
        @enderror
        <br/><label for="">Password</label><input type="password" name="password" value="{{old('password')}}"/>
        <br/><label for="">Password Confirmation</label><input type="password" name="password_confirmation" value="{{old('password_confirmation')}}"/>
        {{--@if($errors->has('password')) 
            @foreach($errors->get('password') as $error) 
                <br/><span style="color:red">{{$error}}</span><br/>
            @endforeach
        @endif--}}
        @error('password')
        <br/><span style="color:red">{{$message}}</span><br/>
        @enderror
        <br/><textarea rows="10" cols="50" name="comments" ><?php print_r(old('comments')); ?></textarea>
        {{--@if($errors->has('comments')) 
            @foreach ($errors->get('comments') as $error) 
                <br/><span style="color:red">{{$error}}</span><br/>
            @endforeach
        @endif--}}
        @error('comments')
        <br/><span style="color:red">{{$message}}</span><br/>
        @enderror

        <br/><label>Computer<input type="checkbox" name="check[]" id="" value="computer" {{old('check')  && in_array("computer", old('check')) ? "checked=checked" : '' }}></label>
        <label>Science<input type="checkbox" name="check[]" id="" value="Science" {{ old('check') && in_array("Science", old('check')) ? "checked=checked" : '' }}/></label>
        <label>Arts<input type="checkbox" name="check[]" id="" value="Arts" {{ old('check') && in_array("Arts", old('check')) ? "checked=checked" : '' }}></label>
        <label>Commerce<input type="checkbox" name="check[]" id="" value="Commerce" {{ old('check') && in_array("Commerce", old('check')) ? "checked=checked" : '' }}></label>
        <label>Mathes<input type="checkbox" name="check[]" id="" value="Mathes" {{ old('check') && in_array("Mathes", old('check')) ? "checked=checked" : ''  }}></label>
        
        {{--@if($errors->has('check')) 
            @foreach ($errors->get('check') as $error) 
                <br/><span style="color:red">{{$error}}</span><br/>
            @endforeach
        @endif--}}
        @error('check')
        <br/><span style="color:red">{{$message}}</span><br/>
        @enderror
        <br/><input type="file" name="photo" id="">
        {{--@if($errors->has('photo')) 
            @foreach ($errors->get('photo') as $error) 
                <br/><span style="color:red">{{$error}}</span><br/>
            @endforeach
        @endif--}}
        @error('photo')
        <br/><span style="color:red">{{$message}}</span><br/>
        @enderror
        <br/><label for="">Accept of TOS<input type="checkbox" name="tos" id="" {{ old('tos') ? "checked=checked" : ''  }}/></label>
        {{--@if($errors->has('tos'))
            @foreach ($errors->get('tos') as $error)
                <br/><span style="color:red">{{$error}}</span><br/>
            @endforeach
        @endif--}}
        @error('tos')
        <br/><span style="color:red">{{$message}}</span><br/>
        @enderror
        <br/><label for="">Enter your website address <input type="url" name="website" id="" value="{{ old('website')}}" /></label>
        {{--@if($errors->has('website')) 
            @foreach ($errors->get('website') as $error) 
                <br/><span style="color:red">{{$error}}</span><br/>
            @endforeach
        @endif--}}
        @error('website')
        <br/><span style="color:red">{{$message}}</span><br/>
        @enderror
        <br/><label for="">Select Start Date<input type="date" name="start_date" id="" value="{{ old('start_date') }}"/></label>
        {{--@if($errors->has('start_date')) 
            @foreach ($errors->get('start_date') as $error) 
                <br/><span style="color:red">{{$error}}</span><br/>
            @endforeach
        @endif--}}
        @error('start_date')
        <br/><span style="color:red">{{$message}}</span><br/>
        @enderror
        <br/><label for="">Select End Date <input type="date" name="end_date" id="" value="{{old('end_date')}}" /></label>
        {{--@if($errors->has('end_date')) 
            @foreach ($errors->get('end_date') as $error) 
                <br/><span style="color:red">{{$error}}</span><br/>
            @endforeach
        @endif--}}
        @error('end_date')
        <br/><span style="color:red">{{$message}}</span><br/>
        @enderror
        <br/><button type="submit">Submit</button><br/>
    </form>
@endsection