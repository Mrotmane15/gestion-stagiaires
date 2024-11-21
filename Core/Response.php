<?php

namespace Core;

enum Response: int
{
    case NotFound = 404;
    case Forbidden = 403;
}
