<h1> Ajouter un article </h1>

<form action="{{URL::route('postnew.route')}}" method="POST">
    
    @csrf

    <div class="form-group">
        <label>Titre</label><br />
        <input type="txt" name="title" value=""><br />
    <div>

    <div class="form-group">
        <label>url</label><br />
        <input type="txt" name="slug" value=""><br />
    <div>

    <div class="form-group">
        <label>Contenu</label><br />
        <input type="txt" name="content" value=""><br />
    <div>




    <button type="submit">Ajouter</button><br />
</form>