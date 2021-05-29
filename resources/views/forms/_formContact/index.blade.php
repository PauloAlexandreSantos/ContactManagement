<div class="col-md-4">
    <label for="name" class="form-label">Nome</label>
    <input type="text" class="form-control" name="name" placeholder="Nome" id="name"
        value="{{ isset($contact->name) ? $contact->name : '' }}" >

</div>
<div class="col-md-4">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Email"
        value="{{ isset($contact->email) ? $contact->email : '' }}" >

</div>
<div class="col-md-4">
    <label for="contact" class="form-label">Contacto</label>
    <input type="number" class="form-control" id="contact" name="contact" placeholder="Contacto"
        value="{{ isset($contact->contact) ? $contact->contact : '' }}" >

</div>
