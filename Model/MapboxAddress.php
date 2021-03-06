<?php declare(strict_types=1);

namespace Geocoder\Provider\Mapbox\Model;

use Geocoder\Model\Address;

final class MapboxAddress extends Address
{
    /**
     * @var string|null
     */
    private $id;

    /**
     * @var string|int|null
     */
    private $streetNumber;

    /**
     * @var string|null
     */
    private $streetName;

    /**
     * @var array
     */
    private $resultType = [];

    /**
     * @var string|null
     */
    private $formattedAddress;

    /**
     * @var string|null
     */
    private $neighborhood;

    /**
     * @param null|string $id
     *
     * @return MapboxAddress
     */
    public function withId(string $id = null)
    {
        $new = clone $this;
        $new->id = $id;

        return $new;
    }

    /**
     * @see https://www.mapbox.com/api-documentation/?language=cURL#response-object
     *
     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return null|string
     */
    public function getStreetName()
    {
        return $this->streetName;
    }
    /**
     * @param string|null $streetName
     *
     * @return MapboxAddress
     */
    public function withStreetName(string $streetName= null)
    {
        $new = clone $this;
        $new->streetName= $streetName;

        return $new;
    }

    /**
     * @return string|int|null
     */
    public function getStreetNumber()
    {
        return $this->streetNumber;
    }

    /**
     * @param string|null $streetNumber
     *
     * @return MapboxAddress
     */
    public function withStreetNumber(string $streetNumber = null)
    {
        $new = clone $this;
        $new->streetNumber = $streetNumber;

        return $new;
    }

    /**
     * @return array
     */
    public function getResultType(): array
    {
        return $this->resultType;
    }

    /**
     * @param array $resultType
     *
     * @return MapboxAddress
     */
    public function withResultType(array $resultType)
    {
        $new = clone $this;
        $new->resultType = $resultType;

        return $new;
    }

    /**
     * @return null|string
     */
    public function getFormattedAddress()
    {
        return $this->formattedAddress;
    }
    /**
     * @param string|null $formattedAddress
     *
     * @return MapboxAddress
     */
    public function withFormattedAddress(string $formattedAddress = null)
    {
        $new = clone $this;
        $new->formattedAddress = $formattedAddress;

        return $new;
    }

    /**
     * @return null|string
     */
    public function getNeighborhood()
    {
        return $this->neighborhood;
    }

    /**
     * @param string|null $neighborhood
     *
     * @return MapboxAddress
     */
    public function withNeighborhood(string $neighborhood = null)
    {
        $new = clone $this;
        $new->neighborhood = $neighborhood;

        return $new;
    }
}
