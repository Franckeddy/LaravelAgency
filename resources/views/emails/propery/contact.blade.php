<x-mail::message>
# Nouvelle demande de contact

Une nouvelle demande de contact a &eacute;t&eacute; effectu&eacute;e sur le bien <a href="{{ route('property.show', ['slug' => $property->getSlug(), 'property' => $property]) }}">{{ $property->title }}</a>.

    - Prenom : {{ $data['first_name'] }}
    - Nom : {{ $data['last_name'] }}
    - Email : {{ $data['email'] }}
    - Telephone : {{ $data['phone'] }}

**Message :**<br />
    {{ $data['message'] }}

</x-mail::message>
