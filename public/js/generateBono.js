function generateBono(id,ocupants,email,dataReserva,dataEntrada,dataSortida) { 

      var doc = new jsPDF()

      var img = new Image()
      img.src = 'img/logo.png'
      doc.addImage(img, 'PNG', 43, 21, 125, 25)


      doc.setFontSize(25)
      doc.text(20, 70, 'BONO')

      doc.setFontType('normal')
      doc.setFontSize(18)

      doc.text(20, 80, 'Numero de reserva:')
      doc.text(80, 80, id.toString())

      doc.text(20, 90, 'Ocupants:')
      doc.text(80, 90, ocupants.toString())

      doc.text(20, 100, 'Email:')
      doc.text(80, 100, email.toString())

      doc.text(20, 110, 'Data Reserva:')
      doc.text(80, 110, dataReserva.toString())

      doc.text(20, 120, 'Data Entrada:')
      doc.text(80, 120, dataEntrada.toString())

      doc.text(20, 130, 'Data Sortida:')
      doc.text(80, 130, dataSortida.toString())

      doc.setFontSize(16)
      doc.text(20, 150, "Presentar aquest document a recepció el dia d'entrada.")

      doc.setLineWidth(0.5)
      doc.line(10,10, 10, 288)
      doc.line(10, 10, 200, 10)
      doc.line(200, 288, 200, 10)
      doc.line(10, 288, 200, 288)

      doc.save('bono_cendrassos.pdf');

    }