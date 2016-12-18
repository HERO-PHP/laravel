<!DOCTYPE html>
<html>
    <head>
        <title>闪存</title>
    </head>
    <body>
        
        <form action="/flash_value" method="POST" name="form">
            name:<input type="text" name="user" id="user" value="{{old('user')}}" /><br/>
            pwd:<input type="text" name="pwd" id="pwd" value="{{old('pwd')}}"/><br/>
            <input type="submit" name="submit"   id="submit"/>
            {{csrf_field()}}
        </form>
    </body>
</html>
