<div>
    <form id="form_ticket">
        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
        <input type="text" name="ticket">
        <input type="text" name="date_at">
        <input type="text" name="asunto">
        <input type="submit" value="Enviar">
    </form>
</div>