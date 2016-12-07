<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier {

	protected $excludes = [ // Route patterns
		'api/*',
		'en/api/*'
	];

    /**
	 * Handle an incoming request.
     *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
     */
	public function handle($request, Closure $next)
	{
		foreach ($this->excludes as $pattern)
		{
			if ($request->is($pattern))
			{
				return $next($request);
			}
		}
		return parent::handle($request, $next);
	}

}
