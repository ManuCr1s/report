<div>
    <form id="form_ticket">
        @csrf
        <input type="text" name="ticket" id="ticket" placeholder="14-00001-00001-2022-08-000001-0" autocomplete="off" required>
        <input type="date" name="date_at">
        <input type="text" name="asunto">
        <input type="submit" value="Enviar">
    </form>
</div>