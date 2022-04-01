<x-app-layout>
	<x-slot name="styles">
		<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	</x-slot>
	<x-slot name="header">
		<h2 class="text-xl font-semibold leading-tight text-gray-800">
			Vendedores
		</h2>
	</x-slot>

	<div class="py-12">
		<div class="py-12">
			@if (count($vendedores) > 0)
				<div class="flex flex-col">
					<div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
						<div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
							<div class="overflow-hidden shadow-md sm:rounded-lg">
								<table class="min-w-full">
									<thead class="bg-gray-50 dark:bg-gray-700">
										<tr>
											<th
												scope="col"
												class="py-3 px-6 text-left text-xs font-medium uppercase tracking-wider text-gray-700 dark:text-gray-400"
											>
												Vendedor
											</th>
											<th
												scope="col"
												class="py-3 px-6 text-left text-xs font-medium uppercase tracking-wider text-gray-700 dark:text-gray-400"
											>
												Dirección
											</th>
											<th
												scope="col"
												class="py-3 px-6 text-left text-xs font-medium uppercase tracking-wider text-gray-700 dark:text-gray-400"
											></th>
										</tr>
									</thead>
									<tbody>
										@foreach ($vendedores as $vendedor)
											<tr class="border-b border-gray-700 bg-gray-800 text-sm text-gray-400">
												<td class="whitespace-nowrap py-4 px-6">
													<span class="font-medium text-white">{{ $vendedor->nombre }}</span>
													<br>
													{{ $vendedor->Apellidos }}
												</td>
												<td class="whitespace-nowrap py-4 px-6">
													{{ $vendedor->created_at->format('d/m/Y') }}
												</td>
												<td class="whitespace-nowrap py-4 px-6">
													<a
														href="{{ route('vendedores.edit', [$vendedor]) }}"
														class="px-1 text-green-500 hover:underline"
													>Editar</a>
													<eliminar-vendedor
														id="{{ $vendedor->id }}"
														nombre="{{ $vendedor->nombre }}"
													></eliminar-vendedor>
												</td>
											</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>

				{{ $vendedores->links() }}
			@else
				<h2 class="my-5 text-center text-3xl font-medium text-gray-400">Aún no hay usuarios registrados</h2>
			@endif
		</div>
	</div>
</x-app-layout>
