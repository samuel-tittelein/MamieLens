<x-app :titre="$titre">
    <div>
        <h1>{{$titre}}</h1>

        <form action="{{ route('contact.submit') }}" method="POST" class="contact-form">
            @csrf
            <div class="form-group">
                <label for="name">Nom :</label>
                <input type="text" id="name" name="name" required class="form-control" placeholder="Votre nom">
            </div>

            <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" required class="form-control" placeholder="Votre adresse email">
            </div>

            <div class="form-group">
                <label for="subject">Sujet :</label>
                <input type="text" id="subject" name="subject" required class="form-control" placeholder="Sujet du message">
            </div>

            <div class="form-group">
                <label for="message">Message :</label>
                <textarea id="message" name="message" required class="form-control" placeholder="Votre message"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>

    </div>
</x-app>
