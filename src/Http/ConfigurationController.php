<?php


namespace Inani\LaravelNovaConfiguration\Http;


use Illuminate\Routing\Controller;
use Inani\LaravelNovaConfiguration\Helpers\Configuration;

class ConfigurationController extends Controller
{
    /**
     * Get all the configurations
     *
     * @return \Illuminate\Database\Eloquent\Collection|Configuration[]
     */
    public function index()
    {
        return Configuration::all();
    }

    /**
     * Get the information of the configuration
     *
     * @param Configuration $configuration
     * @return Configuration
     */
    public function show(Configuration $configuration)
    {
        return $configuration;
    }

    /**
     * Delete configuration
     *
     * @param Configuration $configuration
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function delete(Configuration $configuration)
    {
        $isDeleted = $configuration->delete();
        return response()->json([
            'id' => $configuration->id
        ], !is_null($isDeleted)? 200 : 201);
    }

    /**
     * create a new configuration
     *
     * @param CreateConfigurationRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function save(CreateConfigurationRequest $request)
    {
        $data = Configuration::set(
            $request->get('key'),
            $request->get('value')
        );
        return response()->json([],
            $data ? 200 : 402
        );
    }

    /**
     * Update the configuration
     *
     * @param UpdateConfigurationRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateConfigurationRequest $request)
    {
        Configuration::setById(
            $request->get('id'),
            $request->get('key'),
            $request->get('value')
        );
        return response()->json([],
            200
        );
    }
}