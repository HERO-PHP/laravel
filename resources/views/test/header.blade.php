<!DOCTYPE html>
<html>
    <head>
        <title>隐式控制器测试</title>
    </head>
    <body>
        
        <form action="/tt/sub1" method="POST" name="form" enctype="multipart/form-data">
            name:<input type="text" name="user" id="user" value="{{$arr[0]['a']}}" /><br/>
            pwd:<input type="text" name="pwd" id="pwd" value="{{$user}} {{time()}}" /><br/>
            img:<input type="file" name="pfile" id="file" /><br/>
            <input type="submit" name="submit"   id="submit"/>
            <input type="hidden" name="_method" value="POST" />
            {{csrf_field()}}
        </form>
        
        <table>
            @foreach( $arr as $key => $val)
            {{$key}}==={{$val}}<br/>
            @endforeach
        </table>
    </body>
</html>
