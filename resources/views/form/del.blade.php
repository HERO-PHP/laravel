<!DOCTYPE html>
<html>
    <head>
        <title>del</title>
    </head>
    <body>
        
        <form action="/del" method="post" name="form">
            name:<input type="text" name="user" id="user" /><br/>
            pwd:<input type="text" name="pwd" id="pwd" /><br/>
            <input type="submit" name="submit"   id="submit"/>
            <input type="hidden" name="_method" value="DELETE" />
            {{csrf_field()}}
        </form>
    </body>
</html>
