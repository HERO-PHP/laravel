<!DOCTYPE html>
<html>
    <head>
        <title>form</title>
    </head>
    <body>
        
        <form action="/post" method="post" name="form">
            name:<input type="text" name="user" id="user" /><br/>
            pwd:<input type="text" name="pwd" id="pwd" /><br/>
            <input type="submit" name="submit"   id="submit"/>
            {{csrf_field()}}
        </form>
    </body>
</html>
