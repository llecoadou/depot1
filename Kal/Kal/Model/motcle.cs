namespace Kal.Model
{
    using System;
    using System.Collections.Generic;
    using System.ComponentModel.DataAnnotations;
    using System.ComponentModel.DataAnnotations.Schema;
    using System.Data.Entity.Spatial;

    [Table("kaldb.motcle")]
    public partial class motcle
    {
        [System.Diagnostics.CodeAnalysis.SuppressMessage("Microsoft.Usage", "CA2214:DoNotCallOverridableMethodsInConstructors")]
        public motcle()
        {
            conseils = new HashSet<conseil>();
        }

        [Key]
        public int NUMMOTCLE { get; set; }

        [StringLength(32)]
        public string LIBMOTCLE { get; set; }

        [System.Diagnostics.CodeAnalysis.SuppressMessage("Microsoft.Usage", "CA2227:CollectionPropertiesShouldBeReadOnly")]
        public virtual ICollection<conseil> conseils { get; set; }
    }
}
