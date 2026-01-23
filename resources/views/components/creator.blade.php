@props(['creator'])

<div class="bg-white p-6 rounded-2xl border border-gray-100 text-center hover:shadow-lg transition duration-300">
    <img src="{{ $creator->logo ? asset('storage/'. $creator->logo) : asset('images/user.png') }}"
        class="w-20 h-20 rounded-full mx-auto mb-4 border-4 border-blue-50">
    <h4 class="font-bold text-gray-800 text-lg"> {{ $creator->name }} </h4>
    <p class="text-gray-500 text-sm mb-4"> {{ $creator->designation }} </p>

    @can('user-follow', $creator)
    <form action="/follow/{{ $creator->id }}" method="POST">
        @csrf
        <button
            class="text-blue-600 text-sm font-bold hover:bg-blue-50 w-full py-2 rounded-lg border border-blue-100 transition block w-100">
            {{ $creator->followers()->where('follower_id', Auth::id())->exists() ? 'Following' : 'Follow' }}
        </button>
    </form>
    @endcan
</div>
