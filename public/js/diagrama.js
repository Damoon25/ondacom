document.addEventListener("DOMContentLoaded", function () {
    // Fetch para obtener los datos desde PHP
    fetch('diagramaData.php')
        .then(response => response.json())
        .then(data => {
            // Limpiar nodos existentes para evitar duplicación
            d3.selectAll('.node').remove();
            d3.selectAll('line').remove();

            const svg = d3.select("#lines")
                .attr("width", window.innerWidth)  // Cubrir todo el ancho de la ventana
                .attr("height", window.innerHeight)  // Cubrir toda la altura
                .style("position", "absolute")
                .style("top", "0")
                .style("left", "0");

            // Renderizar nodos con textos y la clase .textNode
            data.nodes.forEach(node => {
                const container = d3.select(`#node${node.id}`);

                // Limpiar contenedor antes de renderizar
                container.html('');


                // Agregar el texto dentro de cada nodo con la clase .textNode
                const contentDiv = container.append("div")
                    .attr("class", "node-content")
                    .style("display", "flex")
                    .style("flex-direction", "column")
                    .style("align-items", "center")
                    .style("text-align", "center");

                // Agregar texto con la clase .textNode
                contentDiv.append("p")
                    .attr("class", "textNode")
                    .style("color", "var(--color4)")  // Asegura que el color esté definido
                    .style("margin", "0")
                    .html(`<span class="numberText">${node.id}.</span><br class="mb-2">${node.name}`);

                // Agregar ícono debajo del texto
                contentDiv.append("img")
                    .attr("class", "iconNode")
                    .attr("src", node.icon)
                    .attr("alt", "icon")
                    .style("width", "50px")
                    .style("height", "50px")
                    .style("margin-top", "10px");
            });

            // Crear las líneas de conexión entre los nodos
            const links = svg.selectAll("line")
                .data(data.links)
                .enter()
                .append("line")
                .style("stroke", "var(--color4)")
                .style("stroke-width", 3);

            // Función para actualizar las posiciones de las líneas
            function updateLines() {
                links
                    .attr("x1", d => {
                        const nodeSource = document.querySelector(`#node${d.source}`);
                        return nodeSource.getBoundingClientRect().left + (nodeSource.offsetWidth / 2);
                    })
                    .attr("y1", d => {
                        const nodeSource = document.querySelector(`#node${d.source}`);
                        return nodeSource.getBoundingClientRect().top + window.scrollY + (nodeSource.offsetHeight / 2);
                    })
                    .attr("x2", d => {
                        const nodeTarget = document.querySelector(`#node${d.target}`);
                        return nodeTarget.getBoundingClientRect().left + (nodeTarget.offsetWidth / 2);
                    })
                    .attr("y2", d => {
                        const nodeTarget = document.querySelector(`#node${d.target}`);
                        return nodeTarget.getBoundingClientRect().top + window.scrollY + (nodeTarget.offsetHeight / 2);
                    });
            }

            // Llamar a la función para dibujar las líneas
            updateLines();

            // Actualizar las líneas cuando la ventana se redimensiona
            window.addEventListener("resize", function () {
                svg.attr("width", window.innerWidth).attr("height", window.innerHeight);
                updateLines();
            });

            // Actualizar las líneas cuando la página se desplaza
            window.addEventListener("scroll", updateLines);
        })
        .catch(error => console.error('Error al cargar los datos:', error));
});
