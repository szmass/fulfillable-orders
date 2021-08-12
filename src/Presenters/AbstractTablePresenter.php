<?php

namespace FulfillableOrders\Presenters;

abstract class AbstractTablePresenter
{
    abstract protected function getMask(): string;

    abstract protected function getHeader(): array;

    abstract protected function getSeparator(): array;
}