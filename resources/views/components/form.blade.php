<form method="POST" action="{{route('form-input.store')}}" >
    @csrf
    <input type="text" placeholder="Name" name="name" id="name">
    <input type="email" placeholder="Email" name="email" id="email">
    <textarea placeholder="Text" name="text" id="text"></textarea>
    <button>Send</button>
</form>
