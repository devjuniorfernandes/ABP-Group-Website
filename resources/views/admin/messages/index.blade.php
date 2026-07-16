@extends('layouts.admin')

@section('header_title', 'Mensagens Recebidas')

@section('content')
    <div class="bg-white p-6 shadow-sm">
        <div class="flex items-center justify-between mb-6 pb-4 border-b border-gray-100">
            <h2 class="font-primary font-bold text-lg text-[#1a2c42]">Caixa de Entrada</h2>
        </div>

        @if($messages->isEmpty())
            <p class="text-sm text-gray-400 py-12 text-center">Nenhuma mensagem recebida na caixa de entrada.</p>
        @else
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse text-sm">
                    <thead>
                        <tr class="bg-gray-50 border-b border-gray-200 text-xs font-bold uppercase tracking-wider text-gray-500">
                            <th class="p-4 w-6 text-center">Estado</th>
                            <th class="p-4">Remetente / Empresa</th>
                            <th class="p-4">Assunto</th>
                            <th class="p-4">Data de Receção</th>
                            <th class="p-4 text-right">Ações</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-150">
                        @foreach($messages as $msg)
                            <tr class="hover:bg-gray-50/50 {{ !$msg->is_read ? 'font-semibold text-gray-900 bg-blue-50/10' : 'text-gray-600' }}">
                                <td class="p-4 text-center">
                                    @if(!$msg->is_read)
                                        <span class="inline-block w-2.5 h-2.5 bg-[#e51718] rounded-full" title="Mensagem não lida"></span>
                                    @else
                                        <span class="inline-block w-2.5 h-2.5 bg-gray-200 rounded-full" title="Mensagem lida"></span>
                                    @endif
                                </td>
                                <td class="p-4">
                                    <div class="font-bold text-[#1a2c42]">{{ $msg->name }}</div>
                                    <div class="text-xs text-gray-400 mt-0.5">{{ $msg->company ?? 'Particular' }}</div>
                                </td>
                                <td class="p-4 truncate max-w-xs">
                                    {{ $msg->subject }}
                                </td>
                                <td class="p-4 text-gray-500 text-xs">
                                    {{ $msg->created_at->format('d/m/Y H:i') }} ({{ $msg->created_at->diffForHumans() }})
                                </td>
                                <td class="p-4 text-right space-x-2">
                                    <a href="{{ route('admin.messages.show', $msg->id) }}" 
                                       class="inline-block text-xs font-bold text-blue-600 hover:text-blue-800 uppercase tracking-wider transition-colors">Ler</a>
                                    
                                    <form action="{{ route('admin.messages.destroy', $msg->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Tem a certeza que deseja eliminar esta mensagem?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-xs font-bold text-[#e51718] hover:text-red-800 uppercase tracking-wider transition-colors">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="mt-6">
                {{ $messages->links() }}
            </div>
        @endif
    </div>
@endsection
