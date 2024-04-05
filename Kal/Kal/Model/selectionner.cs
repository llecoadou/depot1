namespace Kal.Model
{
    using System;
    using System.Collections.Generic;
    using System.ComponentModel.DataAnnotations;
    using System.ComponentModel.DataAnnotations.Schema;
    using System.Data.Entity.Spatial;

    [Table("kaldb.selectionner")]
    public partial class selectionner
    {
        [Key]
        [Column(Order = 0)]
        public int NUMCONSEIL { get; set; }

        [Key]
        [Column(Order = 1)]
        [StringLength(32)]
        public string REFPROD { get; set; }
    }
}
