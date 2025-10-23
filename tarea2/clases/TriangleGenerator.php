<?php
class TriangleGenerator
{
    public function generateTriangle(int $altura): string
    {
        $resultado = "";
        for ($i = 1; $i <= $altura; $i++) {
            $resultado = "$resultado<p style=\"font-family: monospace\">";
            $linea = "";
            $numAsteriscos = $i * 2 - 1;
            $espacios = $altura - $i;
            for ($j = 0; $j < $espacios; $j++) {
                $linea .= "&nbsp;";
            }

            for ($k = 0; $k < $numAsteriscos; $k++) {
                $linea .= "*";
            }
            $resultado = $resultado . $linea . "</p>\n";
        }
        return $resultado;
    }
}
?>