#!/bin/bash

set -e

cp _original_images/*.* ./img
mogrify -geometry 560x600 ./img/*.png

