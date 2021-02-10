


<form action="{{route('send-email')}}" method="POST">
    @csrf
    @method('POST')
    <label for="testo-mail">Inserisci testo della mail</label>
    <input type="text" name="testo-mail" >
    <br>
    <input type="submit" value="SEND">
</form>
