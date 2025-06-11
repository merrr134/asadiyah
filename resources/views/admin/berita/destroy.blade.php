<form action="{{ route('admin.berita.destroy', $item) }}" method="POST" class="inline"
      onsubmit="return confirm('Yakin ingin menghapus berita ini?')">
    @csrf
    @method('DELETE')
    <button type="submit" class="text-red-600 hover:text-red-900">Hapus</button>
</form>
