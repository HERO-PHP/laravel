
        @include('test.header') ====================引入html文件<br/>
        
        
        <form action="/tt/sub1" method="POST" name="form" enctype="multipart/form-data">
            name:<input type="text" name="user" id="user" value="{{$arr[0]['a']}}" /><br/>
            pwd:<input type="text" name="pwd" id="pwd" value="{{$user}} {{time()}}" /><br/>
            img:<input type="file" name="pfile" id="file" /><br/>
            <input type="submit" name="submit"   id="submit"/>
            <input type="hidden" name="_method" value="POST" />
            {{csrf_field()}}
        </form>
        
        
        {{date('Y-m-d H:i:s')}} ====================php函数<br/>
        {{$user or ""}} ============================默认值，默认为空<br/>
        {!!$html!!} ============================样式输出,显示html<br/>
        {{$html}} ==================================与上面比较<br/>
        
        
        
        @if($user < 999)
            < 999
        @else
            > 999
        @endif
        
        
        <div>
            @foreach( $arr as $key => $val)
            {{$key}}==={{ $val['a'] }}<br/>
            @endforeach
        </div>
        
        
        
    </body>
</html>
