<?php 

	namespace App\Http\Controllers;
	use Illuminate\Support\Facades\Redirect;
	use Illuminate\Support\Facades\View;
	use Illuminate\Http\Request;	
	use Validator;
	use App\Nerd;

	class NerdController extends Controller{

		public function index(){

			$nerds = Nerd::all();

			return View::make('nerds.index')
				->with('nerds', $nerds);
		}

		public function create(){

			return View::make('nerds.create');
		}

		public function store(Request $request){

			$validator = Validator::make($request->all(),[

					'nombre' => 'required',
					'email' => 'required|email',
					'nerd_level' => 'required|numeric'
				]);

			if($validator->fails()){

				return Redirect::to('nerds/create')
					->withErrors($validator)
					->withInput();

			}
			else{

				$nerd = new Nerd;
				$nerd->nombre = $request->input('nombre');
				$nerd->email = $request->input('email');
				$nerd->nerd_level = $request->input('nerd_level');
				$nerd->save();

				return Redirect::to('nerds')->with('message', 'Nerdo correctamente creado.');	
			}

		}

		public function show($id){

			$nerd = Nerd::find($id);

			return View::make('nerds.show')
				->with('nerd', $nerd);
		}

		public function edit($id){

			$nerd = Nerd::find($id);
			
			return View::make('nerds.edit')
				->with('nerd', $nerd);		
		}

		public function update($id, Request $request){

			$validator = Validator::make($request->all(),[

					'nombre' => 'required',
					'email' => 'required|email',
					'nerd_level' => 'required|numeric'
				]);

			if($validator->fails()){

				return Redirect::to('nerds/' . $id . '/edit')
					->withErrors($validator)
					->withInput();
			}
			else{

				$nerd = Nerd::find($id);
				$nerd->nombre = $request->input('nombre');
				$nerd->email = $request->input('email');
				$nerd->nerd_level = $request->input('nerd_level');
				$nerd->save();

				return Redirect::to('nerds') ->with('message', 'Se ha actualizado correctamente el Nerdo.');
				return Redirect::to('nerds');
			}
		}

		public function destroy($id){

			$nerd = Nerd::find($id);
			$nerd->delete();

			return Redirect::to('nerds')
				->with('message', 'Se ha eleminiado correctamente el Nerdo');
			return Redirect::to('nerds');
		}
	}
?>